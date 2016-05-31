/* Gerardo's script his registration form */

  $(document).ready(function(){

    var Alberta =
      [
      {display: "Brooks" , value: "Brook"},
      {display: "Calgary" , value: "Calgary"},
      {display: "Camrose" , value: "Camrose"},
      {display: "Cold Lake" , value: "Cold-Lake"},
      {display: "Edmonton" , value: "Edmonton"},
      {display: "Fort McMurray" , value: "Fort-McMurray"},
      {display: "Fort Saskatchewan" , value: "Fort-Saskatchewan"},
      {display: "Grande Prairie" , value: "Grande-Prairie"},
      {display: "Lacombe" , value: "Lacombe"},
      {display: "Leduc" , value: "Leduc"},
      {display: "Lethbridge" , value: "Lethbridge"},
      {display: "Lloydminster" , value: "Lloydminster"},
      {display: "Medicine Hat" , value: "Medicine-Hat"},
      {display: "Red Deer" , value: "Red-Deer"},
      {display: "Spruce Grove" , value: "Spruce-Grove"},
      {display: "St. Albert" , value: "St.-Albert"},
      {display: "Wetaskiwin" , value: "Wetaskiwin"},
      ];

    var BritishColumbia =
      [
      {display: "Chilliwack" , value: "Chilliwack"},
      {display: "Cranbrook" , value: "Cranbrook"},
      {display: "Fort Nelson" , value: "Fort-Nelson"},
      {display: "Kamloops" , value: "Kamloops"},
      {display: "Nanaimo" , value: "Nanaimo"},
      {display: "Osoyoos" , value: "Osoyoos"},
      {display: "Penticton" , value: "Penticton"},
      {display: "Prince George" , value: "Prince-George"},
      {display: "Prince Rupert" , value: "Prince-Rupert"},
      {display: "Tofino" , value: "Tofino"},
      {display: "Vancouver" , value: "Vancouver"},
      {display: "Victoria" , value: "Victoria"},
      ];

    var Manitoba =
      [
      {display: "Brandon" , value: "Brandon"},
      {display: "Churchill" , value: "Churchill"},
      {display: "Dauphin" , value: "Dauphin"},
      {display: "Morden" , value: "Morden"},
      {display: "Pierson" , value: "Pierson"},
      {display: "Portage la Prairie" , value: "Portage-la-Prairie"},
      {display: "Steinbach" , value: "Steinbach"},
      {display: "The Pas" , value: "The-Pas"},
      {display: "Thompson" , value: "Thompson"},
      {display: "Winnipeg" , value: "Winnipeg"},
      ];

    var NewBrunswick =
      [
      {display: "Dieppe" , value: "Dieppe"},
      {display: "Fredericton" , value: "Fredericton"},
      {display: "Moncton" , value: "Moncton"},
      {display: "Saint John" , value: "Saint-John"},
      ];

    var NewfoundlandandLabrador =
      [
      {display: "Conception Bay South" , value: "Conception-Bay=South"},
      {display: "Corner Brook" , value: "Corner-Brook"},
      {display: "Gander" , value: "Gander"},
      {display: "Grand Falls-Windsor" , value: "Grand-Falls-Windsor"},
      {display: "Happy Valley-Goose Bay" , value: "Happy-Valley-Goose-Bay"},
      {display: "Labrador City" , value: "Labrador-City"},
      {display: "Mount Pearl" , value: "Mount-Pearl"},
      {display: "Paradise" , value: "Paradise"},
      {display: "St. Johns" , value: "St.-Johns"},
      {display: "Torbay" , value: "Torbay"},
      ];

    var NorthwestTerritories =
      [
      {display: "Fort Simpson" , value: "Fort-Simpson"},
      {display: "Inuvik" , value: "Inuvik"},
      {display: "Sachs Harbour" , value: "Sachs-Harbour"},
      {display: "Yellowknife" , value: "Yellowknife"},
      ];

    var NovaScotia =
      [
      {display: "Halifax" , value: "Halifax"},
      {display: "Kentville" , value: "Kentville"},
      {display: "Liverpool" , value: "Liverpool"},
      {display: "Sydney" , value: "Sydney"},
      {display: "Shelburne" , value: "Shelburne"},
      {display: "Truro" , value: "Truro"},
      {display: "Yarmouth" , value: "Yarmouth"},
      ];

    var Nunavut =
      [
      {display: "Alert" , value: "Alert"},
      {display: "Baker Lake" , value: "Baker-Lake"},
      {display: "Cambridge" , value: "Cambridge"},
      {display: "Eureka" , value: "Eureka"},
      {display: "Iqaluit" , value: "Iqaluit"},
      {display: "Kugluktuk" , value: "Kugluktuk"},
      {display: "Rankin Inlet" , value: "Rankin-Inlet"},
      ];

    var Ontario =
      [
      {display: "Emo" , value: "Emo"},
      {display: "Kenora" , value: "Kenora"},
      {display: "Midland" , value: "Midland"},
      {display: "Moosonee" , value: "Moosonee"},
      {display: "Niagara Falls" , value: "Niagara-Falls"},
      {display: "Ottawa" , value: "Ottawa"},
      {display: "Sudbury" , value: "Sudbury"},
      {display: "Thunder Bay" , value: "Thunder-Bay"},
      {display: "Toronto" , value: "Toronto"},
      {display: "Windsor" , value: "Windsor"},
      ];

    var PrinceEdwardIsland =
      [
      {display: "Alberton" , value: "Alberton"},
      {display: "Cardigan" , value: "Cardigan"},
      {display: "Charlottetown" , value: "Charlottetown"},
      {display: "Cornwall" , value: "Cornwall"},
      {display: "Crapaud" , value: "Crapaud"},
      {display: "Georgetown" , value: "Georgetown"},
      {display: "Kensington" , value: "Kensington"},
      {display: "Milton Vale Park" , value: "Milton-Vale-Park"},
      {display: "Montague" , value: "Montague"},
      {display: "Murray River" , value: "Murray-River"},
      {display: "O Leary" , value: "O-Leary"},
      {display: "Souris" , value: "Souris"},
      {display: "Stratford" , value: "Stratford"},
      {display: "Summerside" , value: "Summerside"},
      ];

    var Quebec =
      [
      {display: "Chicoutimi" , value: "Chicoutimi"},
      {display: "Drummondville" , value: "Drummondville"},
      {display: "Gatineau" , value: "Gatineau"},
      {display: "Granby" , value: "Granby"},
      {display: "Laval" , value: "Laval"},
      {display: "Levis" , value: "Levis"},
      {display: "Longueuil" , value: "Longueuil"},
      {display: "Montreal" , value: "Montreal"},
      {display: "Quebec City" , value: "Quebec-City"},
      {display: "Sanguenay" , value: "Sanguenay"},
      {display: "Saint-Hyacinthe" , value: "Saint-Hyacinthe"},
      {display: "Saint-Jean-sur-Richelieu" , value: "Saint-Jean-sur-Richelieu"},
      {display: "Saint-Jerome" , value: "Saint-Jerome"},
      {display: "Trois-Rivieres" , value: "Trois-Rivieres"},
      ];

    var Saskatchewan =
      [
      {display: "Estevan" , value: "Estevan"},
      {display: "Humboldt" , value: "Humboldt"},
      {display: "Lloydminster" , value: "Lloydminster"},
      {display: "Maple Creek" , value: "Maple-Creek"},
      {display: "Melville" , value: "Melville"},
      {display: "Moose Jaw" , value: "Moose-Jaw"},
      {display: "North Battleford" , value: "North-Battleford"},
      {display: "Prince Albert" , value: "Prince-Albert"},
      {display: "Regina" , value: "Regina"},
      {display: "Saskatoon" , value: "Saskatoon"},
      {display: "Swift Current" , value: "Swift-Current"},
      {display: "Weyburn" , value: "Weyburn"},
      {display: "Yorkton" , value: "Yorkton"},
      ];

    var Yukon =
      [
      {display: "Daw City" , value: "Daw-City"},
      {display: "Old Crow" , value: "Old-Crow"},
      {display: "Whitehorse" , value: "Whitehorse"},
      ];

    $("#parent_selection").change(function(){
      var parent = $(this).val();

      switch(parent){
        case 'PleaseSelect':
          list(PleaseSelect);
          break;

        case 'Alberta':
          list(Alberta);
          break;
        case 'BritishColumbia':
          list(BritishColumbia);
          break;
        case 'Manitoba':
          list(Manitoba);
          break;
        case 'NewBrunswick':
          list(NewBrunswick);
          break;
        case 'NewfoundlandandLabrador':
          list (NewfoundlandandLabrador);
          break;
        case 'NorthwestTerritories':
          list(NorthwestTerritories);
          break;
        case 'NovaScotia':
          list(NovaScotia);
          break;
        case 'Nunavut':
          list(Nunavut);
          break;
        case 'Ontario':
          list(Ontario);
          break;
        case 'PrinceEdwardIsland':
          list(PrinceEdwardIsland);
          break;
        case 'Quebec':
          list(Quebec);
          break;
        case 'Saskatchewan':
          list(Saskatchewan);
          break;
        case 'Yukon':
          list(Yukon);
          break;
        default:
          $("#child_selection").html('');
          break;
      }
  });

  function list(array_list)
    {
      $("#child_selection").html("");
      $(array_list).each(function (i){
        $("#child_selection").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
        });
    }
  });

  /*function ResetForm()
  {
    var frm = document.getElementById('reset')[0];
    frm.reset();
  }*/

  /*for (i = 0; i < frm_elements.length; i++)
  {
    field_type = frm_elements[i].type.toLowerCase();
    switch (field_type)
    {
    case "text":
    case "password":
    case "textarea":
    case "hidden":
      frm_elements[i].value = "";
      break;
    case "radio":
    case "checkbox":
      if (frm_elements[i].checked)
      {
        frm_elements[i].checked = false;
      }
      break;
    case "select-one":
    case "select-multi":
      frm_elements[i].selectedIndex = -1;
      break;
    default:
      break;
    }
  }*/
