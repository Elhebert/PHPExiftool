<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAreaXPosition1 extends AbstractTagGroup
{

  protected string $id = 'Ricoh:AFAreaXPosition1';

  protected string $name = 'AFAreaXPosition1';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::Main
       * line : 333448
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Ricoh::Main.Ricoh:AFAreaXPosition1',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
