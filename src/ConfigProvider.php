<?php

declare(strict_types=1);

namespace Componenta\Http\Psr7\Slim;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UploadedFileFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use Slim\Psr7\Factory\RequestFactory;
use Slim\Psr7\Factory\ResponseFactory;
use Slim\Psr7\Factory\ServerRequestFactory;
use Slim\Psr7\Factory\StreamFactory;
use Slim\Psr7\Factory\UploadedFileFactory;
use Slim\Psr7\Factory\UriFactory;

final class ConfigProvider extends \Componenta\Config\ConfigProvider
{
    protected function getInvokables(): array
    {
        return [
            RequestFactory::class,
            ResponseFactory::class,
            ServerRequestFactory::class,
            StreamFactory::class,
            UploadedFileFactory::class,
            UriFactory::class,
        ];
    }

    protected function getAliases(): array
    {
        return [
            RequestFactoryInterface::class => RequestFactory::class,
            ResponseFactoryInterface::class => ResponseFactory::class,
            ServerRequestFactoryInterface::class => ServerRequestFactory::class,
            StreamFactoryInterface::class => StreamFactory::class,
            UploadedFileFactoryInterface::class => UploadedFileFactory::class,
            UriFactoryInterface::class => UriFactory::class,
        ];
    }
}
