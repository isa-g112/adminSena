namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()
    {
        return response()->json(Computer::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
        ]);

        $computer = Computer::create($validated);

        return response()->json($computer, 201);
    }

    public function show($id)
    {
        $computer = Computer::find($id);
        if (!$computer) {
            return response()->json(['message' => 'No encontrado'], 404);
        }

        return response()->json($computer);
    }
}


