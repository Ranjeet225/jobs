@if (empty($row->customer_image_url))
    {{ __('messages.common.n/a') }}
@else
    <a href="{{route('download.image', $row->id)}}" class="downloadTestimonial" data-turbo="false"><i
                class="fas fa-download text-primary fs-1" aria-hidden="true"></i></a>
@endif
