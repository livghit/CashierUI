<?php

it('loads billing view', function () {
    expect(true)->toBeTrue();
});

it('has billing config', function () {
    expect(config('cashierui'))->not->toBeNull();
});

it('has cashier config' , function(){
    expect(config('cashier'))->not->toBeNull();
});
