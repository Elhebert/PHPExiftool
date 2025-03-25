<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AtCaptureUserCrop extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:AtCaptureUserCrop';

  protected string $name = 'AtCaptureUserCrop';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155463
       * type : int32u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:AtCaptureUserCrop',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2052;

}
