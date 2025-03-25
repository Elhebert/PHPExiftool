<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPEG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LameMethod extends AbstractTagGroup
{

  protected string $id = 'MPEG:LameMethod';

  protected string $name = 'LameMethod';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MPEG::Lame
       * line : 165928
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPEG::Lame.MPEG:LameMethod',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
