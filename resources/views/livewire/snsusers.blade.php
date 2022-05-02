<div>
    {{-- In work, do what you enjoy. --}}
    <div class="rounded overflow-hidden shadow-lg">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">ユーザーの皆さん</div>
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
