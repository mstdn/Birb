@auth
    @unless (current_user()->is($user))
        <form method="POST"
              action="{{ route('follow', $user->username) }}"
        >
            @csrf

            <button type="submit"
                    class="bg-pink-500 shadow-sm p-2 pink-500 px-6 rounded-md text-white hover:text-white hover:bg-pink-600"
            >
                {{ current_user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
            </button>
        </form>
    @endunless
@endauth
