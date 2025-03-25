<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Gamma extends AbstractTagGroup
{

  protected string $id = 'MIFF:Gamma';

  protected string $name = 'Gamma';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MIFF::Main
       * line : 164337
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MIFF::Main.MIFF:Gamma',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
