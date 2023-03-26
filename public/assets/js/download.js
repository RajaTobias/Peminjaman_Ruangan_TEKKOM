const { Exception } = require("sass");

function download () {
    try {
        Storage::disk('local')->download('views/User/suratkelas');
    }
    catch (\Exception $e) {
        return $e->getMessage();
    }
}