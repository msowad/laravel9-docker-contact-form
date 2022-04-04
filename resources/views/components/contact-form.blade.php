<x-contact-form-container>
  <form
    method="POST"
    action="{{ route('contact.submit') }}"
  >
    @csrf
    <div class="mb-6">
      <x-input
        name='name'
        placeholder="Your name"
      />
    </div>
    <div class="mb-6">
      <x-input
        type="email"
        name='email'
        placeholder="Your email"
      />
    </div>
    <div class="mb-6">
      <x-input
        placeholder="Your message"
        name='message'
        component='textarea'
        row="6"
      />
    </div>
    <div class="mb-10">
      <x-primary-button type='submit'>
        Submit
      </x-primary-button>
    </div>
  </form>
</x-contact-form-container>
