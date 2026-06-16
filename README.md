# Componenta HTTP PSR Slim

Slim PSR-7 and PSR-17 integration for Componenta HTTP. The package registers Slim PSR-7 factories and aliases the standard PSR-17 interfaces to them.

## Installation

```bash
composer require componenta/http-psr componenta/http-psr-slim
```

## Registered Services

`Componenta\Http\Psr7\Slim\ConfigProvider` registers invokables for:

- `RequestFactory`
- `ResponseFactory`
- `ServerRequestFactory`
- `StreamFactory`
- `UploadedFileFactory`
- `UriFactory`

It aliases the corresponding PSR-17 interfaces to those classes.

## Boundary

This package only provides concrete PSR factories. Use `componenta/http-psr` for server request creator wiring.
