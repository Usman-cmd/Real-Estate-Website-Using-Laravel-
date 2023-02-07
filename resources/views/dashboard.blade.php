
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <div class="header">
                        <h1 class="header-text">Welcome to Dashboard</h1>
                        <a href="/index" class="header-button">Go to Dashboard</a>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    
    .header {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  height: 60vh;
  background-color: #3f51b5;
}

.header-text {
  color: white;
  font-size: 48px;
  font-weight: bold;
  text-shadow: 1px 1px 2px black;
  margin-bottom: 20px;
}

.header-button {
background-color: white;
color: #3f51b5;
padding: 10px 20px;
border-radius: 25px;
text-decoration: none;
font-weight: bold;
transition: all 0.2s;
}

.header-button:hover {
background-color: #3f51b5;
color: white;
cursor: pointer;
}
</style>

