<x-base-layout>
    <x-nav.user-nav/>
    <main >
            <div class="flex justify-center mt-10">
                <div>
                    <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1555982105-d25af4182e4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">{{$product->name}}</p>
                    </div>
                    <p class="pt-1 text-gray-900">$ {{$product->price}}</p>
                    <form method="post" action="{{url("checkout")}}">
                        @csrf
                        <input hidden name="product_id" value="{{$product->id}}">
                        <div class="flex">
                            <button
                                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md"
                                type="submit">
                                Comprar
                            </button>
                            <input type="number" name="quantity" value="0" min="1" step="1" class="ml-3  w-20 px-3 py-1.5 text-gray-700 border  border-blue-600 rounded">
                        </div>
                    </form>
                </div>
            </div>
    </main>
</x-base-layout>