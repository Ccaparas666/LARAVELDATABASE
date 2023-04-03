<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Balance') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">

                    <h6>Student Balance</h6><br />
                    <table class="table-auto border-separate border-spacing-5">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border border-gray-800">Student No.</th>
                                <th class="px-4 py-2 border border-gray-800">Amount Due</th>
                                <th class="px-4 py-2 border border-gray-800">Total Balance</th>
                                <th class="px-4 py-2 border border-gray-800">Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($balances as $bal)
                            <tr>
                                <td class="px-4 py-2 border border-gray-800">{{ $bal->sno }}</td>
                                <td class="px-4 py-2 border border-gray-800">{{ number_format($bal->amountDue,2) }}</td>
                                <td class="px-4 py-2 border border-gray-800">{{ number_format($bal->totalBalance,2) }}</td>
                                <td class="px-4 py-2 border border-gray-800">{{ $bal->notes }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a class="mt-4 float-left bg-blue-200 text-black font-bold py-2 px-4 rounded" href="{{route('balances')}}"> Back </a>
                    <br /><br /><br />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>