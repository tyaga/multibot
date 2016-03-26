<?

$app->get('/', function () use ($app) {
    return 'Multibot';
});

$app->get('/hook', 'Controller@processHook');

