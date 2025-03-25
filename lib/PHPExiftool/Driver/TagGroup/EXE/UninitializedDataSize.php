<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\EXE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UninitializedDataSize extends AbstractTagGroup
{

  protected string $id = 'EXE:UninitializedDataSize';

  protected string $name = 'UninitializedDataSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : EXE::Main
       * line : 108881
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'EXE::Main.EXE:UninitializedDataSize',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
