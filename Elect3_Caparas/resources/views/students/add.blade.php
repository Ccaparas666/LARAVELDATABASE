
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
                    <h6>Errors Encountered</h6>
                    @if($errors)
                       <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form method ="POST" action="{{ route ('student-store')}}">
                        @csrf
                        <div class="flex-items-center">
                            <label for ="ID Number">ID Number</label>
                            <div>
                                <input type="text" class="text-black" name="xidNo" value="{{ old('xidNo') }}"/>
                            </div>
                        </div>
                        <div class="flex-items-center">
                            <label for ="firstName">FirstName</label>
                            <div>
                                <input type="text" class="text-black" name="xfirstName" value="{{ old('xfirstName') }}"/>
                            </div>
                        </div>
                        <div class="flex-items-center">
                            <label for ="middleName">MiddleName</label>
                            <div>
                                <input type="text" class="text-black" name="xmiddleName" value="{{ old('xmiddleName') }}"/>
                            </div>
                        </div>
                        <div class="flex-items-center">
                            <label for ="lastName">LastName</label>
                            <div>
                                <input type="text" class="text-black" name="xlastName" value="{{ old('xlastName') }}"/>
                            </div>
                        </div>
                        <div class="flex-items-center">
                            <label for ="suffix">Suffix</label>
                            <div>
                                <input type="text" class="text-black" name="xsuffix" value="{{ old('xsuffix') }}"/>
                            </div>
                        </div>
                        <div class="flex-items-center">
                            <label for ="course">Course</label>
                            <div>
                                <input type="text" class="text-black" name="xcourse" value="{{ old('xcourse') }}"/>
                            </div>
                        </div>
                        <div class="flex-items-center">
                            <label for ="year">Year</label>
                            <div>
                                <input type="number" class="text-black" name="xyear" value="{{ old('xyear') }}"/>
                            </div>
                        </div>
                        <div class="flex-items-center">
                            <label for ="birthDate">Birthdate</label>
                            <div>
                                <input type="date" name="xbirthDate" value="{{ old('xbirthDate') }}"/>
                            </div>
                        </div>
                        <div class="flex-items-center">
                            <label for ="gender">Gender</label>
                            <div>
                                <select name="xgender">
                                    <option value="Male">Male</option>
                                    <option value="FeMale">Female</option>
                                </select>
                            </div>
                        </div>
                        <input class="mt-4 bg-teal-200 hover:bg-teal-500 text-black font-bold py-2 px-4 rounded" type="submit" value="Submit info"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>