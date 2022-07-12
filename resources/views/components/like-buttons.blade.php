<div class="flex">
    <form method="POST"
          action="/posts/{{ $post->id }}/like"
    >
        @csrf

        <div class="flex items-center mr-4 {{ $post->isLikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500' }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="20" height="20" class="dark:text-gray-100">
                <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
            </svg>

            <button type="submit"
                    class="flex items-center space-x-2"
            >
                {{ $post->likes ?: 0 }}
            </button>
        </div>
    </form>

    <form method="POST"
          action="/posts/{{ $post->id }}/like"
    >
        @csrf
        @method('DELETE')

        <div class="flex items-center {{ $post->isDislikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500' }}">
            <svg viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="dark:text-gray-100">
                <path d="M22 9.07503C22 10.7199 21.2857 12.1591 20.1633 13.2899L12.5102 20.7944C12.3061 20.8972 12.2041 21 12 21C11.7959 21 11.5918 20.8972 11.4898 20.7944L3.83673 13.1871C2.71429 12.0563 2 10.5142 2 8.86943C2 7.3274 2.71429 5.88818 3.83673 4.75737C5.06122 3.62655 6.59184 2.90694 8.22449 3.00974C9.55102 3.00974 10.7755 3.52375 11.7959 4.34616C14.2449 2.39293 17.7143 2.59853 19.9592 4.86017C21.2857 5.88818 22 7.4302 22 9.07503Z"/>
            </svg>

            <button type="submit"
                    class="flex items-center space-x-2"
            >
                {{ $post->dislikes ?: 0 }}
            </button>
        </div>
    </form>
</div>
