<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KyoceraRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Model extends AbstractTagGroup
{

  protected string $id = 'KyoceraRaw:Model';

  protected string $name = 'Model';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : KyoceraRaw::Main
       * line : 160729
       * type : string
       * writable : false
       * count : 12
       * flags : permanent
       */
      'id' => 'KyoceraRaw::Main.KyoceraRaw:Model',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 12;

  protected int $flags = 4;

}
