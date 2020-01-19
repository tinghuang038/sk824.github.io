let renderer, scene, camera
let cameraControl, stats

function initStats() {
  const stats = new Stats()
  stats.setMode(0)
  document.getElementById('stats').appendChild(stats.domElement)
  return stats
}

// 畫面初始化
function init() {
  scene = new THREE.Scene()

  // 相機設定
  camera = new THREE.PerspectiveCamera(
    60,
    window.innerWidth / window.innerHeight,
    // 800 / 200,
    0.1,
    1000
  )
  camera.position.set(-45,10, 45)
  camera.lookAt(scene.position)

  // 三軸座標輔助
  let axes = new THREE.AxesHelper(20)
  // scene.add(axes)

  stats = initStats()

  // 渲染器設定
  renderer = new THREE.WebGLRenderer({
    alpha: true
  })
  renderer.setSize(window.innerWidth/4*3, window.innerHeight/4*3)
  // renderer.setClearColor(0xffffff, 1)

  // 建立 OrbitControls
  cameraControl = new THREE.OrbitControls(camera, renderer.domElement)
  cameraControl.enableDamping = true // 啟用阻尼效果
  cameraControl.dampingFactor = 0.25 // 阻尼系數
  // cameraControl.autoRotate = true // 啟用自動旋轉


  // 產生物件並加到場景
  // 板身
  const shape = new THREE.Shape();
    shape.moveTo( -4, -22 );
    shape.lineTo( -4, 22);
    shape.absarc( 0, 22, 4, Math.PI, 0, true );
    shape.lineTo( 4, -22);
    shape.absarc( 0, -22, 4, 0 , Math.PI, true );
    // shape.lineTo( 0, );

    var extrudeSettings = {
        steps: 8,
        depth: 0.1,
        bevelEnabled: true,
        bevelThickness: 1,
        bevelSize: 1,
        bevelOffset: 2,
        bevelSegments: 100
    };
    
    var geometry = new THREE.ExtrudeGeometry( shape, extrudeSettings );
    // var material = new THREE.MeshPhongMaterial( { color: 0x0000ff } );

    const boardMap = new THREE.TextureLoader().load('./images/t9.jpg')
    // boardMap.mapping =THREE.CubeReflectionMapping;
    boardMap.wrapS = THREE.RepeatWrapping;
    boardMap.wrapT = THREE.RepeatWrapping;
    boardMap.repeat.set( 0.2, 0.2);
  

    const boardMat = new THREE.MeshStandardMaterial({
      roughness: 0.5, // 粗糙度
      metalness: 0, // 金屬感
      transparent: true, // 透明與否
      opacity: 1, // 透明度
      side: THREE.FrontSide, // 雙面材質
      map: boardMap // 皮膚貼圖
    })

    mesh = new THREE.Mesh( geometry, boardMat ) ;

    // 輪子貼皮

    const torusMat = new THREE.MeshStandardMaterial({
      roughness: 0.8, // 粗糙度
      metalness: 0, // 金屬感
      transparent: true, // 透明與否
      opacity: 1, // 透明度
      side: THREE.DoubleSide, // 雙面材質
      color: 0xffffff // 皮膚貼圖
    })

    // 測試輪子貼皮
    const testMap = new THREE.TextureLoader().load('./images/s6.jpg')
    // boardMap.mapping =THREE.CubeReflectionMapping;
    testMap.wrapS = THREE.RepeatWrapping;
    testMap.wrapT = THREE.RepeatWrapping;
    testMap.repeat.set( 0.2, 0.2);
  

    const testMat = new THREE.MeshStandardMaterial({
      roughness: 0.5, // 粗糙度
      metalness: 0, // 金屬感
      transparent: false, // 透明與否
      opacity: 1, // 透明度
      side: THREE.FrontSide, // 雙面材質
      map: testMap // 皮膚貼圖
    })

    // 金屬貼皮

    const metalMap = new THREE.TextureLoader().load('./images/m1.jpg')
    testMap.wrapS = THREE.RepeatWrapping;
    testMap.wrapT = THREE.RepeatWrapping;
    testMap.repeat.set( 1, 1);

    const metalMat = new THREE.MeshStandardMaterial({
      roughness: 0.5, // 粗糙度
      metalness: 1, // 金屬感
      transparent: true, // 透明與否
      opacity: 1, // 透明度
      side: THREE.DoubleSide, // 雙面材質
      // color: 0xc0c0c0
      map: metalMap // 皮膚貼圖
    })
    
    // 金屬貼皮2

    const metalMap2 = new THREE.TextureLoader().load('./images/m2.jpg')
    testMap.wrapS = THREE.RepeatWrapping;
    testMap.wrapT = THREE.RepeatWrapping;
    testMap.repeat.set( 1, 1);

    const metalMat2 = new THREE.MeshStandardMaterial({
      roughness: 0.5, // 粗糙度
      metalness: 1, // 金屬感
      transparent: true, // 透明與否
      opacity: 1, // 透明度
      side: THREE.DoubleSide, // 雙面材質
      // color: 0xc0c0c0
      map: metalMap2 // 皮膚貼圖
    })
    // 輪子
    const geometry2 = new THREE.TorusBufferGeometry( 1.3, 1.5, 50, 100 );
    const material2 = new THREE.MeshPhongMaterial({
        color: 0xFFFCEC
    })

    torus = new THREE.Mesh( geometry2, material2 )
    torus.position.set(5, -14, 5)
    torus.rotation.x +=2
    torus.rotation.y += 1.57

    torus2 = new THREE.Mesh( geometry2, material2 )
    torus2.position.set(-5, -14, 5)
    torus2.rotation.x +=2
    torus2.rotation.y += 1.57

    torus3 = new THREE.Mesh( geometry2, material2 )
    torus3.position.set(-5, 14, 5)
    torus3.rotation.x +=2
    torus3.rotation.y +=1.57 

    torus4 = new THREE.Mesh( geometry2, material2 )
    torus4.position.set(5, 14, 5)
    torus4.rotation.x +=2
    torus4.rotation.y +=1.57

    // 輪架底部片狀
    var geometry3 = new THREE.BoxGeometry( 4, 7, 1 );
    var material3 = new THREE.MeshPhongMaterial( {color: 0x666666} );
    const mainMat = new THREE.MeshStandardMaterial({
      roughness: 0.5, // 粗糙度
      metalness: .2, // 金屬感
      transparent: true, // 透明與否
      opacity: 1, // 透明度
      side: THREE.DoubleSide, // 雙面材質
      color: 0x666666
      // map: metalMap // 皮膚貼圖
    })
    cube1 = new THREE.Mesh( geometry3, metalMat );
    cube1.position.set(0, 13, 1)
    cube2 = new THREE.Mesh( geometry3, metalMat );
    cube2.position.set(0, -14, 1)

    // 輪架底部螺絲
    var geometry4 = new THREE.CylinderGeometry( 0.3, 0.3, 1, 64 );
    var material4 = new THREE.MeshPhongMaterial( {color: 0xc0c0c0} );
    cylinder1 = new THREE.Mesh( geometry4, material4 );
    cylinder1.position.set(1.4, 11, 1.2)
    cylinder1.rotation.x +=1.54
    cylinder2 = new THREE.Mesh( geometry4, material4 );
    cylinder2.position.set(-1.4, 11, 1.2)
    cylinder2.rotation.x +=1.54
    cylinder3 = new THREE.Mesh( geometry4, material4 );
    cylinder3.position.set(1.4, 15, 1.2)
    cylinder3.rotation.x +=1.54
    cylinder4 = new THREE.Mesh( geometry4, material4 );
    cylinder4.position.set(-1.4, 15, 1.2)
    cylinder4.rotation.x +=1.54
    cylinder5 = new THREE.Mesh( geometry4, material4 );
    cylinder5.position.set(1.4, -12, 1.2)
    cylinder5.rotation.x +=1.54
    cylinder6 = new THREE.Mesh( geometry4, material4 );
    cylinder6.position.set(-1.4, -12, 1.2)
    cylinder6.rotation.x +=1.54
    cylinder7 = new THREE.Mesh( geometry4, material4 );
    cylinder7.position.set(1.4, -16, 1.2)
    cylinder7.rotation.x +=1.54
    cylinder8 = new THREE.Mesh( geometry4, material4 );
    cylinder8.position.set(-1.4, -16, 1.2)
    cylinder8.rotation.x +=1.54

    // 輪架底部螺絲的螺帽
    var geometry8 = new THREE.CylinderGeometry( 0.2, 0.2, 1, 64 );
    var material8 = new THREE.MeshPhongMaterial( {color: 0x666666} );
    cylinderHat1 = new THREE.Mesh( geometry8, metalMat );
    cylinderHat1.position.set(1.4, 11, 1.3)
    cylinderHat1.rotation.x +=1.54
    cylinderHat2 = new THREE.Mesh( geometry8, metalMat );
    cylinderHat2.position.set(-1.4, 11, 1.3)
    cylinderHat2.rotation.x +=1.54
    cylinderHat3 = new THREE.Mesh( geometry8, metalMat );
    cylinderHat3.position.set(1.4, 15, 1.3)
    cylinderHat3.rotation.x +=1.54
    cylinderHat4 = new THREE.Mesh( geometry8, metalMat );
    cylinderHat4.position.set(-1.4, 15, 1.3)
    cylinderHat4.rotation.x +=1.54
    cylinderHat5 = new THREE.Mesh( geometry8, material8 );
    cylinderHat5.position.set(1.4, -12, 1.3)
    cylinderHat5.rotation.x +=1.54
    cylinderHat6 = new THREE.Mesh( geometry8, material8 );
    cylinderHat6.position.set(-1.4, -12, 1.3)
    cylinderHat6.rotation.x +=1.54
    cylinderHat7 = new THREE.Mesh( geometry8, material8 );
    cylinderHat7.position.set(1.4, -16, 1.3)
    cylinderHat7.rotation.x +=1.54
    cylinderHat8 = new THREE.Mesh( geometry8, material8 );
    cylinderHat8.position.set(-1.4, -16, 1.3)
    cylinderHat8.rotation.x +=1.54
    
    // 輪架中槓槓
    var geometry5 = new THREE.CylinderGeometry( 1, 1, 13, 64 );
    // var material5 = new THREE.MeshPhongMaterial( {color: 0xc0c0c0} );
    tube1 = new THREE.Mesh( geometry5, metalMat2 );
    tube1.position.set(0, 14, 4.8)
    tube1.rotation.z +=1.58
    tube2 = new THREE.Mesh( geometry5, metalMat2 );
    tube2.position.set(0, -14, 4.8)
    tube2.rotation.z +=1.58

    // 輪架主方體
    var geometry6 = new THREE.BoxGeometry( 2, 5, 4 );
    // var material6 = new THREE.MeshPhongMaterial( {color: 0xffd700} );

    cubeBody1 = new THREE.Mesh( geometry6, metalMat );
    cubeBody1.position.set(0, 13, 1)
    cubeBody2 = new THREE.Mesh( geometry6, metalMat );
    cubeBody2.position.set(0, -14, 1)

    // 輪架交接方體
    var geometry10 = new THREE.BoxGeometry( 1, 2.5, 2 );
    var material10 = new THREE.MeshPhongMaterial( {color: 0xc0c0c0} );
    conect1 = new THREE.Mesh( geometry10, metalMat );
    conect1.position.set(0, 14, 4)
    conect2 = new THREE.Mesh( geometry10, metalMat );
    conect2.position.set(0, -15, 4)    

    // 輪架中間圓柱
    var geometry7 = new THREE.CylinderGeometry( 1, 1, 5, 64 );
    var material7 = new THREE.MeshPhongMaterial( {color: 0x666666} );
    cubeTube1 = new THREE.Mesh( geometry7, metalMat );
    cubeTube1.position.set(0, 12, 3)
    cubeTube1.rotation.x +=1.2
    cubeTube2 = new THREE.Mesh( geometry7, metalMat );
    cubeTube2.position.set(0, -13, 3)
    cubeTube2.rotation.x -=1.5

    // 輪架中間圓柱螺帽
    var geometry9 = new THREE.CylinderGeometry( 0.7, 0.7, 5.2, 64 );
    var material9 = new THREE.MeshPhongMaterial( {color: 0x111111} );
    cubeTubeHat1 = new THREE.Mesh( geometry9, material9 );
    cubeTubeHat1.position.set(0, 12, 3)
    cubeTubeHat1.rotation.x +=1.2
    cubeTubeHat2 = new THREE.Mesh( geometry9, material9 );
    cubeTubeHat2.position.set(0, -13, 3)
    cubeTubeHat2.rotation.x -=1.5

    // 滑板全組
    var group = new THREE.Group()
    group.add(mesh)
    group.add(torus)
    group.add(torus2)
    group.add(torus3)
    group.add(torus4)
    group.add(cube1)
    group.add(cube2)
    group.add(cylinder1)
    group.add(cylinder2)
    group.add(cylinder3)
    group.add(cylinder4)
    group.add(cylinder5)
    group.add(cylinder6)
    group.add(cylinder7)
    group.add(cylinder8)
    group.add(cylinderHat1)
    group.add(cylinderHat2)
    group.add(cylinderHat3)
    group.add(cylinderHat4)
    group.add(cylinderHat5)
    group.add(cylinderHat6)
    group.add(cylinderHat7)
    group.add(cylinderHat8)
    group.add(tube1)
    group.add(tube2)
    group.add(cubeBody1)
    group.add(cubeBody2)
    group.add(cubeTube1)
    group.add(cubeTube2)
    group.add(cubeTubeHat1)
    group.add(cubeTubeHat2)
    group.add(conect1)
    group.add(conect2)
    
    scene.add(group)

  // 簡單的 spotlight 照亮物體
  let spotLight = new THREE.SpotLight(0xffffff)
  spotLight.position.set(-20, 10, 30)
  scene.add(spotLight)
  // let spotHelper = new THREE.SpotLightHelper(spotLight)
  // scene.add(spotHelper)

  // 將渲染出來的畫面放到網頁上的 DOM
  document.body.appendChild(renderer.domElement)
}

function render() {
  stats.update()
  cameraControl.update()
  requestAnimationFrame(render)
  renderer.render(scene, camera)
}

window.addEventListener('resize', function() {
  camera.aspect = window.innerWidth / window.innerHeight
  camera.updateProjectionMatrix()
  renderer.setSize(window.innerWidth/4*3, window.innerHeight/4*3)
})

init()
render()