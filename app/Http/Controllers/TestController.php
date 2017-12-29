<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
      $aResult = [
        'code'=> 200,
        'message'=> "",
        'data'=> [
                  '1'=> [
                    'groupName'=> "内部组",
                    'children'=> [
                                  // '2'=> [
                                  //       'roleName'=> "super-admin",
                                  //       'roleDesc'=> " 超级管理员",
                                  //       'children'=> [
                                  //         '0'=> [
                                  //           'resourceName'=> "京东集团",
                                  //           'resourceCode'=> "00000000",
                                  //           'resourceFullName'=> "京东集团",
                                  //           'resourceFullPath'=> "00000000",
                                  //           'resourceFullIdPath'=> "0"
                                  //         ]
                                  //       ]
                                  //     ],
                                  '1'=> [
                                        'roleName'=> "guest",
                                        'roleDesc'=> "访客",
                                        'children'=> [
                                                      '1005648'=> [
                                                        'resourceName'=> "自动化部",
                                                        'resourceCode'=> "00031426",
                                                        'resourceFullName'=> "京东集团-CTO体系-IT资源服务部-自动化部",
                                                        'resourceFullPath'=> "00000000/00020462/00026851/00031426",
                                                        'resourceFullIdPath'=> "0/13/2204/1005648"
                                                      ],
                                                      '1002857'=> [
                                                        'resourceName'=> "基础设施管理部",
                                                        'resourceCode'=> "00027878",
                                                        'resourceFullName'=> "京东集团-CTO体系-IT资源服务部-基础设施管理部",
                                                        'resourceFullPath'=> "00000000/00020462/00026851/00027878",
                                                        'resourceFullIdPath'=> "0/13/2204/1002857"
                                                      ]
                                                    ]
                                        ]
                            ]
                ]
         ]
  ];

$a = strpos('1/2/3/4', '1/2/3') == '0';
dd($a);

foreach ($aResult['data'] as $groupKey => $groupItem) {
  foreach ($groupItem['children'] as $roleKey => $roleItem) {
    $aUserNodePrivilege[] = $roleItem['children'];
    foreach ($roleItem['children'] as $nodeKey => $nodeItem) {
      $aUserNode[] = $nodeItem;
      $aUserNodeId[] = $nodeKey;
    }

  }
}
$aa = reset($aUserNode);
dd($aa);

$aUserFirstNodePrivilege[] = reset($aUserNodePrivilege[1]);
dd($aUserFirstNodePrivilege[0]['resourceCode']);

dd($ret['data'][1]['children'][1]['children'][1005648]['resourceFullPath']); //"00000000/00020462/00026851/00031426"

dd(in_array('super-admin', $ret['data'][1]['children'][2])); //true

}
}
