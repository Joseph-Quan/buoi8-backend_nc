<?php

test('home page returns a successful response', function () {
    $response = $this->get(route('home'));
    $response->assertStatus(200);
});

test('about page returns a successful response', function () {
    $response = $this->get(route('about'));
    $response->assertStatus(200);
});

test('contact page returns a successful response', function () {
    $response = $this->get(route('contact'));
    $response->assertStatus(200);
});

test('shop products page returns a successful response', function () {
    $response = $this->get(route('shop.products'));
    $response->assertStatus(200);
});

test('shop cart page returns a successful response', function () {
    $response = $this->get(route('shop.cart'));
    $response->assertStatus(200);
});

test('articles resource pages return successful responses', function () {
    $this->get(route('articles.index'))->assertStatus(200);
    $this->get(route('articles.create'))->assertStatus(200);
    $this->get(route('articles.show', 1))->assertStatus(200);
});

test('posts resource pages return successful responses', function () {
    $post = \App\Models\Post::factory()->create();

    $this->get(route('posts.index'))->assertStatus(200);
    $this->get(route('posts.create'))->assertStatus(200);
    $this->get(route('posts.show', $post))->assertStatus(200);
});
