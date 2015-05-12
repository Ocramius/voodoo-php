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

        return $invocation->proceed();
    }

    /**
     * @Go\Lang\Annotation\Around("execution(public VoodooPhpExamples\*->*(*))")
     */
    public function aroundMethodInvocation(\Go\Aop\Intercept\MethodInvocation $invocation)
    {
        if ('BOOP' === $invocation->getArguments()[0]) {
            echo 'PLEASE DO NOT BOOP!';

            return;
        }

        return $invocation->proceed();
    }
    /**
     * @Go\Lang\Annotation\Around("access(public VoodooPhpExamples\AccessibleObject->*)")
     */
    public function aroundPropertyAccess(\Go\Aop\Intercept\FieldAccess $access)
    {
        if (
            \Go\Aop\Intercept\FieldAccess::WRITE === $access->getAccessType()
            && ! is_int($access->getValueToSet())
        ) {
            throw new \UnexpectedValueException(sprintf(
                'Tried to set value of type "%s" for field "%s$%s", integer expected integer',
                gettype($access->getValueToSet()),
                $access->getField()->getDeclaringClass()->getName(),
                $access->getField()->getName()
            ));
        }

        return $access->proceed();
    }
}

$applicationAspectKernel = ApplicationAspectKernel::getInstance();
$applicationAspectKernel->init([
    'debug'        => true,
    'cacheDir'     => __DIR__ . '/cache',
    'includePaths' => [__DIR__ . '/../src/'],
]);