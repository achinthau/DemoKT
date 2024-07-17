<div>
    <h1>Skill Selector Component</h1>
    @dump($selectedSkills)
    <div>
        @foreach ($selectedSkillName as $skill)
            <div class="space-x-2">
                <label for="{{$skill->id}}"> {{ $skill->title }}</label>
            </div>
        @endforeach
    </div>
</div>