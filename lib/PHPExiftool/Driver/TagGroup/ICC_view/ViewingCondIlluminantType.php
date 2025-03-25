<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_view;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ViewingCondIlluminantType extends AbstractTagGroup
{

  protected string $id = 'ICC-view:ViewingCondIlluminantType';

  protected string $name = 'ViewingCondIlluminantType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::ViewingConditions
       * line : 147047
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ICC_Profile::ViewingConditions.ICC-view:ViewingCondIlluminantType',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
