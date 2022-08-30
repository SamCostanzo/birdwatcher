<?php

namespace App\Http\Controllers;

use App\Models\Bird;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BirdController extends Controller
{
    public function index(){
        // dd(request());
        return view('homepage', [
            'birds' => [
                [
                    'id' => 1,
                    'name' => 'Seaside Sparrow',
                    'color' => 'brown',
                    'description' => 'The Seaside Sparrow is a habitat specialist of salt and brackish marshes, and rarely freshwater marshes (subspecies A. m. mirabilis), along the Atlantic and Gulf coasts of the United States. First described in 1811 by Alexander Wilson (1), the species has attracted the interest of systematists since the late 1800s. It occurs in relatively small, localized populations that have been divided into several morphologically distinct subspecies, with weakly differentiated forms subsumed by some authorities. The population near Corpus Christi, Texas, south to the Rio Grande is an isolated and genetically distinct subspecies (A. m. sennetti) that appears to have a small population and is potentially at risk.'
                ],
                [
                    'id' => 2,
                    'name' => "Spix's Macaw",
                    'color' => 'blue',
                    'description' => "Sometime in May 1819, the Bavarian naturalist Johann Baptist Ritter von Spix shot a specimen of a blue macaw that, he recorded, “lives in flocks, although very rare, near Juazeiro in the region bordering the São Francisco, [and is] notable for its thin voice.” When he and his companion, Carl Friedrich Philipp von Martius, finally returned to Munich four years after they had left for Brazil, and started to publish on their collections, Spix attributed his specimen to an already known species, the Hyacinth Macaw (Anodorhynchus hyacinthinus), which the two had certainly seen earlier in their explorations, farther south along the Rio São Francisco in northern Minas Gerais state (There are no Hyacinth Macaws there today, just as there are no Spix's Macaws near the town of Juazeiro!) It was left to another Bavarian zoologist, Johann Wagler to correct the mistake, realizing that this generally blue-gray macaw, with a relatively long tail and wings, was quite different to the larger, more vividly blue species with yellow highlights on its face. In 1832, Wagler published a monograph of parrots, wherein he described Spix’s specimen as a new species, Sittace Spixii. Thereafter the species fell into relative obscurity, not being seen again in the wild by a naturalist until 1903, and then again not until the 1980s, when increasingly concerned conservationists mounted what proved to be a last-gasp effort to find the species and secure its protection. Despite claims, some perhaps true, that the ararinha azul (the little blue macaw), as it is known in Brazil, could be found in the states of Piauí and Maranhão, at least formerly, all roads eventually led to the town of Curaçá, in northwest Bahia and less than 100 km from Juazeiro, in a region known to Brazilians as “the end of the world."
                ],
                [
                    'id' => 3,
                    'name' => 'Olive Oropendola',
                    'color' => 'green',
                    'description' => 'Said to prefer tall terra firme forest in most of its range, the large and showy Olive Oropendola can be seen flying over habitats of many types; its presence heralded by the sound of its distinctive ponderous wingbeats. It prefers to forage high above the ground, alone or in small groups, sometimes joining forces with other large icterids (Icteridae) and corvids (Corvidae) to pillage the canopy for invertebrates, fruits, and flower nectar. Despite some wonderfully detailed observational studies made on the nesting of this colonial, canopy-breeding icterid, basic information on its nest architecture, eggs, and nestlings is lacking.'
                ]
            ]
        ]);
    }

    public function show(Bird $bird){
        return view('show', [
            'bird' => $bird
        ]);
    }

}
