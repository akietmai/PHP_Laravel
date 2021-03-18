<div {{ $attributes ->merge(['class' => 'test-class']) }}>
    <h3>Sidebar Component</h3>

    <p>{{ $title }}</p>

    <p>Email : {{ $email }}</p>

    @foreach ($users as $u)
        <p>{{ $u }}<p>
    @endforeach
</div>
