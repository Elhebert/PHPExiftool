<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OriginalDecisionDataOffset extends AbstractTagGroup
{

  protected string $id = 'Canon:OriginalDecisionDataOffset';

  protected string $name = 'OriginalDecisionDataOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::Main
       * line : 65864
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent,protected
       */
      'id' => 'Canon::Main.Canon:OriginalDecisionDataOffset',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2060;

}
