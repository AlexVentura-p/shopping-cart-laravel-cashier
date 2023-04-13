<x-base-layout>
    <x-nav.user-nav/>
    <main>
        <div class="bg-blue-400 text-black font-bold rounded-lg border shadow-lg p-10 mx-10">
            <p class="text-2xl mb-4">Success!</p>
            <p class="text-lg">
                Amount to charge for update: USD {{$quote->amount_total / 100}}
            </p>
            <p>Do you want to continue?</p>
            <form method="post" action=""></form>
            <a href="{{url('subscribe-update')}}">
                <button>
                    Yes
                </button>
            </a>
            <a href="{{url()->previous()}}">
                <button>
                    No
                </button>
            </a>
        </div>
    </main>
    
</x-base-layout>