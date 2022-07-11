<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Qualcomm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class YhiYloConvChrmC_M extends AbstractTagGroup
{

  protected string $id = 'Qualcomm:YhiYloConvChrmC_M';

  protected string $name = 'YhiYloConvChrmC_M';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Yhi Ylo Conv Chrm C M',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Qualcomm::Main
       * line : 310565
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Qualcomm::Main.Qualcomm:YhiYloConvChrmC_M',
      'desc' => [
        'en' => 'Yhi Ylo Conv Chrm C M',
      ],
    ],
  ];

}
