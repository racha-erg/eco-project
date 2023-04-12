<x-mail::message>
    # Salut {{$data['name']}}

    merci d'utiliser notre service!
    Ceci est un e-mail automatisé pour vous informer que votre email a été envoyer avec succès.

    <x-mail::button url="{{ route('contact.send') }}">
        Retourne a la page
    </x-mail::button>

    Thanks,
</x-mail::message>