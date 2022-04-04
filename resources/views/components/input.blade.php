{{-- always save this file without formatting. [placeholder will not visible] --}}
<{{ $component }}
  type="{{ $type }}"
  {{ $rowsAttr }}
  placeholder="{{ $placeholder }}"
  name="{{ $name }}"
  class="
                      w-full
                      rounded-md
                      border
                      border-[#E9EDF4]
                      py-3
                      px-5
                      bg-[#FCFDFE]
                      text-base text-body-color
                      placeholder-[#ACB6BE]
                      outline-none
                      focus-visible:shadow-none
                      focus:border-primary
                    "
></{{ $component }}>
@error($name)
    <div class="text-red-500 text-sm text-left">{{ $message }}</div>
@enderror