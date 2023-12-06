// 仮のデータベース管理
let users = [
    {
      id: 1,
      name: 'ユーザー1',
      favorites: {
        pets: ['タマ', 'ポチ', 'ミケ'],
        people: [{ family: '佐藤', last: '太郎' }, { family: '鈴木', last: '花子' }],
        cars: [{ company: 'トヨタ', car: 'カローラ' }, { company: '日産', car: 'ノート' }],
      },
      history: [
        { type: 'pets', name: 'タマ', concept: 'ペット名' },
        { type: 'people', name: '佐藤太郎', concept: '日本人の苗字と名前' },
        { type: 'cars', name: 'トヨタカローラ', concept: '車のメーカーと名前' },
      ],
    },
    // 他のユーザー情報...
  ];
  
  // 仮の関数：ユーザー情報の取得
  function getUserById(userId) {
    return users.find((user) => user.id === userId);
  }
  
  // 仮の関数：お気に入りの追加
  function addToFavorites(userId, category, item) {
    const user = getUserById(userId);
    if (user) {
      user.favorites[category].push(item);
      return true;
    }
    return false;
  }
  
  // 仮の関数：履歴の追加
  function addToHistory(userId, type, name, concept) {
    const user = getUserById(userId);
    if (user) {
      user.history.push({ type, name, concept });
      return true;
    }
    return false;
  }


        function getRandomName(category) {
            const categories = {
                'human': ['Alice', 'Bob', 'Charlie'], // 人間の名前の例
                'dog': ['Rex', 'Buddy', 'Max'], // 犬の名前の例
                'car': ['Corolla', 'Civic', 'Accord'] // 車の名前の例
            };

            const names = categories[category];
            if (names) {
                const randomIndex = Math.floor(Math.random() * names.length);
                return names[randomIndex];
            }
            return '名前が見つかりません';
        }

        document.getElementById('start').addEventListener('click', function () {
            const selectElement = document.getElementById('select');
            const category = selectElement.value;
            const generatedName = getRandomName(category);

            document.getElementById('generatedName').textContent = generatedName;
        });
