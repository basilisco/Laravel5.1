<?php
namespace CodeDelivery\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function boot() {}

    public function register()
    {
        $models = array(
            'Category',
            'Client',
            'OrderItem',
            'Order',
            'User',
            'Product',
            'Cupom',
        );

        foreach($models as $model) {
        $this->app->bind(
            "CodeDelivery\\Repositories\\{$model}Repository",
            "CodeDelivery\\Repositories\\{$model}RepositoryEloquent"
        );}
    }
}
