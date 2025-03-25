<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Jpeg2000;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JP2Signature extends AbstractTagGroup
{

  protected string $id = 'Jpeg2000:JP2Signature';

  protected string $name = 'JP2Signature';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Jpeg2000::Main
       * line : 154225
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Jpeg2000::Main.Jpeg2000:JP2Signature',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Jpeg2000::Main
       * line : 154229
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Jpeg2000::Main.Jpeg2000:JP2Signature',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
