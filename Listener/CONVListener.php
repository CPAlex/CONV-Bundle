<?php

namespace CONV\CONVBundle\Listener;

use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Claroline\CoreBundle\Event\DisplayToolEvent;

/**
 *  @DI\Service()
 */
class CONVListener
{
    private $container;

    /**
     * @DI\InjectParams({
     *     "container" = @DI\Inject("service_container")
     * })
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @DI\Observe("open_tool_workspace_conv")
     *
     * @param DisplayToolEvent $event
     */
    public function onDisplayWorkspace(DisplayToolEvent $event)
    {
        $event->setContent('Change me for workspace !');
    }

    /**
     * @DI\Observe("open_tool_desktop_conv")
     *
     * @param DisplayToolEvent $event
     */
    public function onDisplayDesktop(DisplayToolEvent $event)
    {
        $event->setContent('Change me for desktop !');
    }
}
