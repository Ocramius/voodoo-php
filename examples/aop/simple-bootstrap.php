<?php

class ApplicationAspectKernel extends \Go\Core\AspectKernel
{
    protected function configureAop(\Go\Core\AspectContainer $container)
    {
        $container->registerAspect(new CatchTheBuzzes());
    }
}

class CatchTheBuzzes implements \Go\Aop\Aspect
{
    /**
     * @Go\Lang\Annotation\Before("execution(public VoodooPhpExamples\*->*(*))")
     */
    public function beforeMethodExecution(\Go\Aop\Intercept\MethodInvocation $invocation)
    {
        var_dump([
            'what'   => 'before method call',
            'object' => $invocation->getThis(),
            'method' => $invocation->getMethod()->getName(),
            'args'   => $invocation->getArguments(),
        ]);
    }
}

$applicationAspectKernel = ApplicationAspectKernel::getInstance();
$applicationAspectKernel->init([
    'debug'        => true,
    'cacheDir'     => __DIR__ . '/cache',
    'includePaths' => [__DIR__ . '/../src/'],
]);