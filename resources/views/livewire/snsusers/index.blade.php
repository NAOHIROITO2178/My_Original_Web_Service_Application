<div>
    @if(session()->has('message'))
    <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
        <p>{{ session('message') }}</p>
    </div>
    @endif
    <div class="rounded overflow-hidden shadow-lg">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">ユーザーの皆さん</div>
            @include('livewire.snsusers.create')
        </div>
        <div class="px-6 pt-4 pb-2">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">名前</th>
                        <th class="px-4 py-2">苗字</th>
                        <th class="px-4 py-2">メールアドレス</th>
                        <th class="px-4 py-2">電話番号</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($snsusers as $snsuser)
                        <tr>
                            <td class="border px-4 py-2">{{ $snsuser->firstname }}</td>
                            <td class="border px-4 py-2">{{ $snsuser->lastname }}</td>
                            <td class="border px-4 py-2">{{ $snsuser->email }}</td>
                            <td class="border px-4 py-2">{{ $snsuser->phone }}</td>
                            <td class="border px-4 py-2">編集</td>
                            <td class="border px-4 py-2">削除</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
