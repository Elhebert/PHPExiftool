<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VC_1MaximumGOP extends AbstractTagGroup
{

  protected string $id = 'MXF:VC-1MaximumGOP';

  protected string $name = 'VC-1MaximumGOP';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'VC-1 Maximum GOP',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 172734
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:VC-1MaximumGOP',
      'desc' => [
        'en' => 'VC-1 Maximum GOP',
      ],
    ],
  ];

}
