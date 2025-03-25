<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhotoCD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SceneBalanceAlgorithmRevision extends AbstractTagGroup
{

  protected string $id = 'PhotoCD:SceneBalanceAlgorithmRevision';

  protected string $name = 'SceneBalanceAlgorithmRevision';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoCD::Main
       * line : 303827
       * type : int8u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'PhotoCD::Main.PhotoCD:SceneBalanceAlgorithmRevision',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

}
