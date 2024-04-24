import PrimaryButton from "@/Components/PrimaryButton"
import { Head, Link, useForm } from "@inertiajs/react"

function Pay() {
   
  return (
    <div className=" w-screen h-screen">
        <Head title="Pay"/>
        <div className="w-full flex items-center justify-center p-10">
            <div className="w-80 p-10 shadow-md flex flex-col justify-between items-start rounded-md gap-5">
             
                    <p className="mb-10">Total Payment  $500</p>
                    <Link href="checkout" className=" bg-teal-700 p-1 rounded-md px-3 hover:bg-teal-400">Go To Payment</Link>
               
            </div>
        </div>
    </div>
  )
}

export default Pay