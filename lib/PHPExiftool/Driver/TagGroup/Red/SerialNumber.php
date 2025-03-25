<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Red;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SerialNumber extends AbstractTagGroup
{

  protected string $id = 'Red:SerialNumber';

  protected string $name = 'SerialNumber';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Red::Main
       * line : 331390
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Red::Main.Red:SerialNumber',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
