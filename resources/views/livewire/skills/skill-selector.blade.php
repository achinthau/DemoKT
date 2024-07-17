<div class="space-y-4">
    <h1>Skill Selector Component</h1>
    @dump($selectedSkills)
    <div>
        @foreach ($skills as $skill)
            <div class="space-x-2">
                <input type="checkbox" id="skill-{{$skill->id}}" name="skill-{{$skill->id}}" value="{{ $skill->id }}" wire:model.live='selectedSkills'>
                <label for="skill-{{$skill->id}}"> {{ $skill->title }}</label>
            </div>
        @endforeach
    </div>

    <div>
        <select wire:model.live='selectedSkills' multiple class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach ($skills as $skill)
                <option value="{{$skill->id}}">{{$skill->title}}</option>
            @endforeach
        </select>
    </div>
</div>
