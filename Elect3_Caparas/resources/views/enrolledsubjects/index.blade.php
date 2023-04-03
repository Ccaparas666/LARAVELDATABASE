<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Enrolled Subjects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                <a class="mt-4 bg-teal-200 text-black font-bold py-2 px-4 rounded" href="{{ route ('add-subject')}}">Add Subjects</a>
                <br><br>
                    <h6>LIST OF SUBJECTS</h6>
                    <table class = "border-separate border-spacing-5">
                        <thead>
                            <tr>
                                <th>Subject Code</th>
                                <th>Description</th>
                                <th>Units</th>
                                <th>Schedule</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($enrolledsubjects as $Subjects)
                                <tr>
                                    <td>{{$Subjects->subjectCode}}</td>
                                    <td>{{$Subjects->description}}</td>
                                    <td>{{$Subjects->units }}</td>
                                    <td>{{$Subjects->schedule }}</td>
                                    <td>                                    
                                        <a class="mt-4 bg-teal-200 text-black font-bold py-2 px-4 rounded" href= "{{route('enrolledsubjects-show', ['Subjects' => $Subjects->esNo]) }}">View</a>
                                    </td>
                                    <td>
                                        <a class="mt-4 bg-teal-200 hover:bg-teal-500 text-black font-bold py-2 px-4 rounded" href= "{{route('enrolledsubjects-edit', ['Subjects' => $Subjects->esNo]) }}">Edit</a>
                                    </td>
                                    <td>
                                        <form method="POST" action = "{{ route('enrolledsubjects-delete', ['Subjects' => $Subjects->esNo ])  }}" onclick="return confirm('Are you sure you want to delete this record?')"> 
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
