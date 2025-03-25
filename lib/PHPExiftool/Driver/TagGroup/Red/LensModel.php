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
class LensModel extends AbstractTagGroup
{

  protected string $id = 'Red:LensModel';

  protected string $name = 'LensModel';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Red::Main
       * line : 331519
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Red::Main.Red:LensModel',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
