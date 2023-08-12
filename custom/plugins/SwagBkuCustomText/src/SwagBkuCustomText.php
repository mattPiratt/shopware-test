<?php

declare(strict_types=1);

namespace SwagBkuCustomText;

use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Shopware\Core\Framework\Plugin\Context\ActivateContext;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;
use Shopware\Core\Framework\Plugin\Context\DeactivateContext;

class SwagBkuCustomText extends Plugin
{
    public function install(InstallContext $installContext): void
    {
        (new BkuCustomFields($this->container))
            ->installCustomFields($installContext->getContext());
    }
    public function activate(ActivateContext $activateContext): void
    {
        (new BkuCustomFields($this->container))
            ->activateCustomFields($activateContext->getContext());
    }
    public function deactivate(DeactivateContext $deactivateContext): void
    {
        (new BkuCustomFields($this->container))
            ->deactivateCustomFields($deactivateContext->getContext());
    }
    public function uninstall(UninstallContext $uninstallContext): void
    {
        (new BkuCustomFields($this->container))
            ->uninstallCustomFields($uninstallContext->getContext());
    }
}
