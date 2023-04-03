<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Students Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-center">
                        <a class="mt-4 bg-teal-200 text-black font-bold py-2 px-4 rounded" href="{{ route ('add-student')}}">Add Student Information</a>
                    </div>
                    <br><br>
                    <div class="flex justify-center">
                        <h1>LIST OF STUDENTS</h1>
                    </div>
                    <br><br>
                    
                    <table class = "table-auto border-separate border-spacing-5">
                        <thead>
                            <tr>
                                <th class="bg-blue-200 text-black font-bold py-2 px-4 rounded">ID No.</th>
                                <th class="bg-blue-200 text-black font-bold py-2 px-4 rounded">Full Name</th>
                                <th class="bg-blue-200 text-black font-bold py-2 px-4 rounded">Course and year</th>
                                <th class="bg-blue-200 text-black font-bold py-2 px-4 rounded">Date</th>
                                <th class="bg-blue-200 text-black font-bold py-2 px-4 rounded">Gender</th>
                                <th></th>
                                <th class="bg-blue-200 text-black font-bold py-2 px-4 rounded">Options</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($studentinfo as $stuinfo)
                                <tr>
                                    <td>{{ $stuinfo-> idNo }}</td>
                                    <td>{{ $stuinfo-> firstName}} {{ $stuinfo->middleName }} {{ $stuinfo->lastName }}</td>
                                    <td>{{ $stuinfo-> course}} {{ $stuinfo->year }}</td>
                                    <td>{{date("F j, Y"), $stuinfo-> birthday}}</td>
                                    <td>{{ $stuinfo-> gender}}</td>
                                    <td>                                    
                                        <a class="mt-4 bg-teal-200 text-black font-bold py-2 px-4 rounded" href= "{{route('students-show', ['stuno' => $stuinfo->sno]) }}" >View</a>
                                    </td>
                                    <td>
                                        <a class="mt-4 bg-teal-200 hover:bg-teal-500 text-black font-bold py-2 px-4 rounded" href="{{route('students-edit', ['stuno' => $stuinfo->sno]) }}">Edit</a>
                                    </td>
                                    <td>
                                        <form method="POST" class="mt-4 bg-teal-200 text-black font-bold py-2 px-4 rounded" action = "{{ route('students-delete', ['stuno' => $stuinfo->sno ])  }}" onclick="return confirm('Are you sure you want to delete this record?')"> 
                                            @csrf
                                            @method('delete')
                                        <button type="submit">Delete</a>
                                        </form> 
                                    </td>                                                                           
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
