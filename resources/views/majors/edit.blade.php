<x-default-layout title="Major" section_title="Edit major data">
    <div class="grid grid-cols-3">
        <form action="{{ route('major.update', $major->id) }}" method="POST"
              class="flex flex-col gap-4 px-6 py-4 bg-white border border-zinc-300 shadow col-span-3 md:col-span-2">
            @csrf
            @method("PUT")

            <div class="grid sm:grid-cols-2 gap-4">
                <div class="flex flex-col gap-2">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name"
                           class="px-3 py-2 border border-zinc-300 bg-slate-50"
                           placeholder="Major Name"
                           value="{{ old('name', $major->name) }}">
                    @error('name')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-col gap-2">
                    <label for="code">Majors Code</label>
                    <input type="text" id="code" name="code"
                           class="px-3 py-2 border border-zinc-300 bg-slate-50"
                           placeholder="Major Code (e.g., TI)"
                           value="{{ old('code', $major->code) }}">
                    @error('code')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <label for="description">Description</label>
                <textarea name="description" id="description"
                          placeholder="Description"
                          class="w-full px-3 py-2 border border-zinc-300 bg-slate-50 h-44">{{ old('description', $major->description) }}</textarea>
                @error('description')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="self-end flex gap-2">
                <a href="{{ route('majors.index') }}"
                   class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer">
                    <span>Cancel</span>
                </a>
                <button type="submit"
                        class="bg-blue-50 border border-blue-500 text-blue-500 px-3 py-2 flex items-center gap-2 cursor-pointer">
                    <i class="ph ph-floppy-disk block text-blue-500"></i>
                    <span>Update</span>
                </button>
            </div>
        </form>
    </div>
</x-default-layout>