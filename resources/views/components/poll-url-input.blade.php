<div
    x-data="{
        value: @entangle($attributes->wire('model')),
        pollUrl: '{{ $getPollUrl() }}',
        interval: {{ $getPollInterval() }},
        fetchValue() {
            fetch(this.pollUrl)
                .then(response => response.json())
                .then(data => this.value = data.value);
        },
        startPolling() {
            this.fetchValue();
            setInterval(() => this.fetchValue(), this.interval);
        }
    }"
    x-init="startPolling"
>
    <input
        type="text"
        x-model="value"
        {{ $attributes->merge(['class' => 'filament-forms-input w-full']) }}
    />
</div>
