<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IterationMinMax extends AbstractTagGroup
{

  protected string $id = 'MNG:IterationMinMax';

  protected string $name = 'IterationMinMax';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::Loop
       * line : 165046
       * type : int32u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'MNG::Loop.MNG:IterationMinMax',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

}
