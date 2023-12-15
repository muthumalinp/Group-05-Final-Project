namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class LeaveRequestStatus extends Mailable
{
    public $status;

    public function __construct($status)
    {
        Log::info('Status in constructor:', ['status' => $status]);
        $this->status = $status;
    }

    public function build()
    {
        \Log::info('Email sent successfully');
        return $this->markdown('emailsmy.leave_request_status');
    }
}
