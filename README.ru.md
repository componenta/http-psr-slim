# Componenta HTTP PSR Slim

Интеграция Slim PSR-7 и PSR-17 для Componenta HTTP. Пакет регистрирует фабрики Slim PSR-7 и назначает на них стандартные интерфейсы PSR-17.

## Установка

```bash
composer require componenta/http-psr componenta/http-psr-slim
```

## Что регистрирует пакет

`Componenta\Http\Psr7\Slim\ConfigProvider` регистрирует invokable-сервисы:

- `RequestFactory`
- `ResponseFactory`
- `ServerRequestFactory`
- `StreamFactory`
- `UploadedFileFactory`
- `UriFactory`

Соответствующие интерфейсы PSR-17 назначаются псевдонимами на эти классы.

## Граница пакета

Пакет только предоставляет конкретные PSR-фабрики. Связку создателя серверного запроса выполняет `componenta/http-psr`.
