<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mbo.addons.client.api' shared service.

$this->services['mbo.addons.client.api'] = $instance = new \PrestaShop\Module\Mbo\Addons\ApiClient(new \GuzzleHttp\Client(['base_uri' => $this->getEnv('ADDONS_API_URL'), 'timeout' => '7200', 'headers' => ['Accept' => 'application/json'], 'CURLOPT_FORBID_REUSE' => true, 'CURLOPT_FRESH_CONNECT' => true]));

$instance->setDefaultParams(($this->services['translator'] ?? $this->getTranslatorService())->getLocale(), ($this->services['prestashop.adapter.data_provider.country'] ?? ($this->services['prestashop.adapter.data_provider.country'] = new \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider()))->getIsoCodebyId(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("_PS_BASE_URL_"), ($this->services['prestashop.core.foundation.version'] ?? $this->load('getPrestashop_Core_Foundation_VersionService.php'))->getSemVersion());

return $instance;
